#
# Cookbook Name:: jenkins
# Recipe:: plugin
#

# JenkinsのHomeディレクトリを定義する
node.default["jenkins][home_dir"] = "/var/lib/jenkins"

# JenkinsのPluginをダウンロードする
%w{git xunit checkstyle pmd cloverphp dry htmlpublisher git-client scm-api analysis-core}.each do |plugin_name|
	execute "download latest #{plugin_name} plugin" do
	  cwd "#{node["jenkins][home_dir"]}/plugins"
	  command "sudo wget -q http://updates.jenkins-ci.org/latest/#{plugin_name}.hpi"
	  action :run
	end
end

# Jenkinsのサービスを再起動する
service "jenkins" do
	action [:restart]
end