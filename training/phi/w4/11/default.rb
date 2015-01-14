include_recipe "apt"
 
apt_repository "jenkins" do
  uri "http://pkg.jenkins-ci.org/debian"
  key "http://pkg.jenkins-ci.org/debian/jenkins-ci.org.key"
  components ["binary/"]
  action :add
end
 
package "jenkins" do
 action:install
end
 
service "jenkins" do
  supports [:stop, :start, :restart]
  action [:start, :enable]
end
