#!/bin/sh

ROOTDIR=$(pwd)

printf "\033[91m\n\n========== [1/4] Laufende Container stoppen ==========\n\n"
docker compose down
printf "\033[32m\nFertig."

printf "\033[91m\n\n========== [2/4] Backend bauen ==========\n\n"
cd ${ROOTDIR}/backend/projektverwaltung
./mvnw clean package
printf "\033[32m\nFertig."

printf "\033[91m\n\n========== [3/4] Frontend bauen ==========\n\n"
cd ${ROOTDIR}/frontend
ng build --output-hashing=none
printf "\033[32m\nFertig."

printf "\033[91m\n\n========== [4/4] Dateien verschieben ==========\n\n"
rm -R ${ROOTDIR}/volumes/frontend/*
rm -R ${ROOTDIR}/volumes/backend/*
cd ${ROOTDIR}
cp -R ./backend/projektverwaltung/target/* ./volumes/backend
cp -R ./frontend/dist/projektverwaltung/* ./volumes/frontend
touch ${ROOTDIR}/volumes/frontend/.gitkeep
touch ${ROOTDIR}/volumes/backend/.gitkeep
printf "\033[32m\nFertig."

clear
printf "\033[92m\n>>> Vorgang abgeschlossen. Applikation gebaut."





