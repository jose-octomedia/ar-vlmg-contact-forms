# config valid only for current version of Capistrano
lock '3.6.0'

set :application, 'vlmg-forms'
#set :repo_url, 'git@github.com:jose-octomedia/ar-vlmg-contact-forms.git'
set :repo_url, 'https://jose-octomedia:Rockandroll1@github.com/jose-octomedia/ar-vlmg-contact-forms.git'
#set :repo_url, 'https://user:password@github.com/user/repo.git'
# Default branch is :master
# ask :branch, `git rev-parse --abbrev-ref HEAD`.chomp

# Default deploy_to directory is /var/www/my_app_name
#set :deploy_to, '/'

# Default value for :scm is :git
#set :scm, :git

# Default value for :format is :airbrussh.
# set :format, :airbrussh

# You can configure the Airbrussh format using :format_options.
# These are the defaults.
#set :format_options, command_output: true, log_file: 'log/capistrano.log', color: :auto, truncate: :auto

# Default value for :pty is false
#set :pty, true

# Default value for :linked_files is []
# append :linked_files, 'config/database.yml', 'config/secrets.yml'

# Default value for linked_dirs is []
# append :linked_dirs, 'log', 'tmp/pids', 'tmp/cache', 'tmp/sockets', 'public/system'

# Default value for default_env is {}
# set :default_env, { path: "/opt/ruby/bin:$PATH" }

# Default value for keep_releases is 5
# set :keep_releases, 5

#remove after first run
#add on second run
#remove on later runs

#namespace :deploy do
 # namespace :assets do
  #  task :precompile, :roles => :web, :except => { :no_release => true } do
   ##   begin
     #   from = source.next_revision(current_revision) # <-- Fail here at first-time deploy because of current/REVISION absence
     # rescue
      #  err_no = true
      #end
     # if err_no || capture("cd #{latest_release} && #{source.local.log(from)} vendor/assets/ app/assets/ | wc -l").to_i > 0
      #  run %Q{cd #{latest_release} && #{rake} RAILS_ENV=#{rails_env} #{asset_env} assets:precompile}
      #else
       # logger.info "Skipping asset pre-compilation because there were no asset changes"
     # end
   #end
  #end
#end