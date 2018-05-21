  export PATH="/var/www/._venv/bin:/usr/local/composer/vendor/bin:/usr/local/composer/vendor/drush/drush:$PATH:/var/www/._gems/bin"
  export PS1="[\u:\[\e[36m\]\w\[\e[m\]]$ "
  export TERM=xterm-256color
  export GEM_HOME=/var/www/._gems

  alias grep='grep --color'                     # show differences in colour
  alias egrep='egrep --color=auto'              # show differences in colour
  alias fgrep='fgrep --color=auto'              # show differences in colour

  # Some shortcuts for different directory listings
  alias ls='ls -hF --color=auto'                 # classify files in colour
  alias dir='ls --color=auto --format=long'     # windows listing
  alias ll='ls -l'                              # long list
  alias la='ls -A'                              # all but . and ..
  alias l='ls -CF'                              #
