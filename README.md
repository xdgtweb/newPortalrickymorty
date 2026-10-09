# newPortalrickymorty
https://xdgtweb.github.io/newPortalrickymorty/index.html

cd /usr/lib/x86_64-linux-gnu/calamares/modules/automirror/

ls -la

mv main.py.DESACTIVADO main.py

printf '#!/usr/bin/env python3\ndef run():\n    return True\n' > main.py

sed -i 's/logging\.http_error([^)]*)/pass/g' main.py

chmod +x main.py




cd /usr/lib/x86_64-linux-gnu/calamares/modules/automirror/ && cp main.pyDESACTIVADO main.py && sed -i 's/logging\.http_error([^)]*)/pass/g' main.py && chmod +x main.py

ls -la main.py && exit
