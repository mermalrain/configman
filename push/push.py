#!/usr/bin/python
#coding=utf-8

from fabric.api import env, run

env.use_ssh_config = True
env.key_filename = '~/.ssh/wcs_rsa'

# 跳板机
env.gateway = 'changshengwang@osys11.meilishuo.com'
  
# 目标服务器
# env.hosts = ['work@10.5.5.33']

def push():
    run('rsync -avz changshengwang@192.168.')
