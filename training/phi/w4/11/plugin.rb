directory "/var/lib/jenkins/updates" do
  owner "jenkins"
  group "jenkins"
  action :create
end
execute "update jenkins update center" do
 command "wget http://updates.jenkins-ci.org/update-center.json -qO- | sed '1d;$d'  > /var/lib/jenkins/updates/default.json"
 user 'jenkins'
 group 'jenkins'
 action :run
end

%w{git checkstyle cloverphp dry pmd htmlpublisher xunit}.each do |plugin_name|
e = execute "sudo /usr/bin/java -jar /var/cache/jenkins/war/WEB-INF/jenkins-cli.jar  -s http://localhost:8080 install-plugin ".concat(plugin_name) do
action :run
end
end
service "jenkins" do
  action :restart
end
