echo "Subindo docker"
try {
	docker compose up -d --build
} catch {
	winget install --id Docker.DockerDesktop
} finally {
	wsl --status
	echo "Docker está funcionando"
	docker compose up -d --build
}
