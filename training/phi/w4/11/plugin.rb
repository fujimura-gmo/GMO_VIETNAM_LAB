bash "download dependencies plugin" do
 cwd "/var/lib/jenkins/plugins"
 code <<-EOH
 wget http://updates.jenkins-ci.org/latest/analysis-core.hpi
 wget http://updates.jenkins-ci.org/latest/git-client.hpi
 wget http://updates.jenkins-ci.org/latest/scm-api.hpi
 wget http://updates.jenkins-ci.org/latest/matrix-project.hpi
 EOH
end

execute "insall-plugin-Git" do
 cwd "/var/lib/jenkins/plugins"
 command "wget http://updates.jenkins-ci.org/latest/git.hpi"
 action :run
end

execute "insall plugin xUnit" do
 cwd "/var/lib/jenkins/plugins"
 action :run
 command "wget http://updates.jenkins-ci.org/latest/xunit.hpi"
end

execute "insall plugin CheckStyle" do
 cwd "/var/lib/jenkins/plugins"
 action :run
 command "wget http://updates.jenkins-ci.org/latest/checkstyle.hpi"
end

execute "/var/lib/jenkins/plugins" do
 cwd "/var/lib/jenkins/plugins"
 action :run
 command "wget http://updates.jenkins-ci.org/latest/pmd.hpi"
end

execute "insall plugin CloverPHP" do
 cwd "/var/lib/jenkins/plugins"
 action :run
 command "wget http://updates.jenkins-ci.org/latest/cloverphp.hpi"
end

execute "insall plugin DRY" do
 cwd "/var/lib/jenkins/plugins"
 action :run
 command "wget http://updates.jenkins-ci.org/latest/dry.hpi"
end

execute "insall plugin HTML Publisher" do
 cwd "/var/lib/jenkins/plugins"
 action :run
 command "wget http://updates.jenkins-ci.org/latest/htmlpublisher.hpi"
end

service "jenkins" do
  action :restart
end
