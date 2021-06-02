#!/bin/sh

# A handy bash script to be executed only once on the extension-specific directories

EXTENSION_NAME="Xiroweb Tin liên quan"
EXTENSION_ALIAS="xiroweb_tinlienquan"
EXTENSION_CLASS_NAME="XirowebTinlienquan"
EXTENSION_DESC="Xiroweb Tin lien quan - danh sach cac tin cung danh muc"
EXTENSION_NAMESPACE="Xiroweb"
TRANSLATION_KEY="XIROWEB_TINLIENQUAN"

find $1 -name "*foo*" -type d -exec rename "s/foo/$EXTENSION_ALIAS/" {} \;
find $1 -name "*foo*" -type f -exec rename "s/foo/$EXTENSION_ALIAS/" {} \;
