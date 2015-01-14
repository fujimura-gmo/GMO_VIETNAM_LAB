#
# Cookbook Name:: jenkins
# Recipe:: plugin
# Copyright 2014, VNLAB
# All rights reserved - Do Not Redistribute

# Download plugin
%w{git xunit checkstyle pmd cloverphp dry htmlpublisher}.each do |name_of_plugin|
 execute "download latest #{name_of_plugin} plugin" do
 cwd "/var/lib/jenkins/plugins"
 command "sudo wget -q http://updates.jenkins-ci.org/latest/#{name_of_plugin}.hpi"
 action :run
 end
end

# Jenkins restart
service "jenkins" do
 action [:restart]
end