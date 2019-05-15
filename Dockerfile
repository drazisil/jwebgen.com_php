FROM node:10.15.3-stretch

WORKDIR /home/node/app

COPY . /home/node/app

EXPOSE 3000