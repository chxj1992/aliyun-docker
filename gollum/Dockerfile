FROM ruby
RUN apt-get -y update && apt-get -y install libicu-dev
RUN gem sources --add https://ruby.taobao.org/ --remove https://rubygems.org/
RUN gem install gollum
RUN gem install github-markdown org-ruby 
VOLUME /wiki
WORKDIR /wiki
CMD ["gollum", "--port", "80", "--host", "gollum"]
EXPOSE 80
