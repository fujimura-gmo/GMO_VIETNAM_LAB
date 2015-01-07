#
# Cookbook Name:: jenkins
# Recipe:: default
#
ruby_block "check jenkins installed" do
  block do
    node.default["jenkins][installed"] = system("dpkg -l | grep jenkins")
  end
  action :create
end

execute "add jenkins key　to apt key" do
  command "wget -q -O - https://jenkins-ci.org/debian/jenkins-ci.org.key | sudo apt-key add -"
  action :run
  only_if { node["jenkins][installed"] == false }
end

execute "add jenkins debian package to apt sources list" do
  command "sudo sh -c 'echo deb http://pkg.jenkins-ci.org/debian binary/ > /etc/apt/sources.list.d/jenkins.list'"
  action :run
  only_if { node["jenkins][installed"] == false }
end

execute "update apt" do
  command "sudo apt-get update"
  action :run
end

package "jenkins" do
  action :install
end

service "jenkins" do
  action [:enable, :start]
end