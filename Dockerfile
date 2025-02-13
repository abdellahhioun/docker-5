FROM nginx:alpine

WORKDIR /usr/share/nginx/html

# Copy initial files
COPY public/ .

# Create volume directory with proper permissions
RUN mkdir -p /usr/share/nginx/html/game-data && \
    chown -R nginx:nginx /usr/share/nginx/html/game-data && \
    chmod 755 /usr/share/nginx/html/game-data

VOLUME /usr/share/nginx/html/game-data
EXPOSE 80