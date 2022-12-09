#!/bin/sh

ROOTDIR=$(pwd)

printf "\033[91m\n\n========== [1/4] Laufende Container stoppen ==========\n\n\033[0m"
docker compose down
printf "\033[32m\nFertig.\033[0m"

printf "\033[91m\n\n========== [2/4] Backend bauen ==========\n\n\033[0m"
cd ${ROOTDIR}/backend
./mvnw clean package
printf "\033[32m\nFertig.\033[0m"

printf "\033[91m\n\n========== [3/4] Frontend bauen ==========\n\n\033[0m"
cd ${ROOTDIR}/frontend
ng build --output-hashing=none
printf "\033[32m\nFertig.\033[0m"

printf "\033[91m\n\n========== [4/4] Dateien verschieben ==========\n\n\033[0m"
rm -R ${ROOTDIR}/volumes/frontend/*
rm -R ${ROOTDIR}/volumes/backend/*
cd ${ROOTDIR}
cp -R ./backend/target/*-runner.jar ./volumes/backend/backend.jar
cp -R ./frontend/dist/frontend/* ./volumes/frontend/
touch ${ROOTDIR}/volumes/frontend/.gitkeep
touch ${ROOTDIR}/volumes/backend/.gitkeep
printf "\033[32m\nFertig.\033[0m"
printf "\033[92m\n>>> Vorgang abgeschlossen. Applikation gebaut.\033[0m\n\n"
docker compose up -d
sleep 5
clear




