#
# Cookbook Name:: jenkins
# Recipe:: default
#
# Copyright 2014, YOUR_COMPANY_NAME
#
# All rights reserved - Do Not Redistribute
#
include_recipe "apt"

  # jenkinsのrepoパッケジーを追加
  apt_repository "jenkins" do
    uri "http://pkg.jenkins-ci.org/debian"
    key "http://pkg.jenkins-ci.org/debian/jenkins-ci.org.key"
    components ["binary/"]
    action :add
    notifies :run, "execute[apt-get update]", :immediately
  end

  # jenkinsをインストール
  package "jenkins" do
    action :install
  end

  # jenkinsを起動
  service "jenkins" do
    action [:enable, :start]
  end
