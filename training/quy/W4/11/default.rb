#
# Cookbook Name:: jenkins
# Recipe:: default
# Copyright 2014, VNLAB
# All rights reserved - Do Not Redistribute

include_recipe "apt"

ruby_block "checking jenkins installed or not" do
 block do
     node.default["jenkins_is_installed"] = system("ps -efwww | grep jenkins")
 end
 action :create
end

execute "apt-key add from jen " do
 command "wget -q -O - https://jenkins-ci.org/debian/jenkins-ci.org.key | sudo apt-key add -"
 action :run
 only_if { node["jenkins_is_installed"] == false }
end

execute "add binary debian pkg to apt sources list" do
 command "sudo sh -c 'echo deb http://pkg.jenkins-ci.org/debian binary/ > /etc/apt/sources.list.d/jenkins.list'"
 action :run
 only_if { node["jenkins_is_installed"] == false }
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