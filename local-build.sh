sudo podman build --tag local/mongo-php-webui:debug -f ./Dockerfile
sudo podman run -p 5000:5000 --name mongo-php-webui --rm local/mongo-php-webui:debug