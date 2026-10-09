# newPortalrickymorty
https://xdgtweb.github.io/newPortalrickymorty/index.html

cp /etc/hosts /etc/hosts.BKP

echo -e "\n127.0.0.1 countrycode.local mirror.local\n" >> /etc/hosts

exit


cd /usr/lib/x86_64-linux-gnu/calamares/modules/automirror/
mv main.py main.py.DESACTIVADO
cp /etc/hosts /etc/hosts.BKP
echo -e "\n127.0.0.1 countrycode.local mirror.local\n" >> /etc/hosts
exit
