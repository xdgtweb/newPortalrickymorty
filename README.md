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



cd /usr/lib/x86_64-linux-gnu/calamares/modules/automirror/

echo -e "#!/usr/bin/env python3\n# Modulo automirror desactivado por fallo Python ISO DDE\nimport sys\ndef run():\n    return None\nif __name__ == \"__main__\":\n    run()\n    sys.exit(0)" > main.py

chmod +x main.py
ls -la main.py main.py.DESACTIVADO



cat > main.py << 'PYEOF'
#!/usr/bin/env python3
import sys

def run():
    return True

if __name__ == "__main__":
    run()
    sys.exit(0)
PYEOF




chmod +x main.py


ls -la main.py


