FROM nginx:1.10
 
ADD ./default.conf /etc/nginx/conf.d/default.conf

#set timezone to Bangkok
ENV TZ=Asia/Bangkok
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone