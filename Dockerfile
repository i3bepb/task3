FROM i3bepb/php-for-test:1.1.4-php-8.2.14-cli-alpine3.19

ARG LOCAL_USER_ID_ARG=82
ARG LOCAL_GROUP_ID_ARG=82

ENV LOCAL_USER_ID=${LOCAL_USER_ID_ARG} \
    LOCAL_GROUP_ID=${LOCAL_GROUP_ID_ARG}

RUN apk add --no-cache shadow \
    && groupmod -g ${LOCAL_GROUP_ID} www-data && usermod -u ${LOCAL_USER_ID} -g ${LOCAL_GROUP_ID} www-data \
    && chown -R ${LOCAL_USER_ID}:${LOCAL_GROUP_ID} /home/www-data

USER www-data