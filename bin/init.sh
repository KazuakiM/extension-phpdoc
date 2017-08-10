#!/bin/sh
#--------------------------------
# Init
#--------------------------------
# Application Variable {{{
helpMessage="\n\n\t\tInit shell help\nParam1(required): file path\n"
#}}}
# Application Argument {{{
if [ $# -eq 1 -a -f $1 ]; then
    action=$1;
else
    echo ${helpMessage}
    exit 1
fi
#}}}

# TODO : ] escape {{{
sed -i -e 's/\[\]/array()/g' $action
sed -i -e 's/]/TextBracket/g' $action
sed -i -e 's/|/TextBar/g' $action
sed -i -e 's/'\''/"/g' $action
# }}}

sed -i -e 's/readonly\s*//g' $action
sed -i -e '/\/\*\s*Properties\|Methods\s*\*\//,/}/  s/^\([a-zA-Z0-9_]*\)\s/public \1 /g' $action
sed -i -e 's/^public\s\(final\s\|abstract\s\|public\s\|protected\s\|private\s\)/\1/g' $action
sed -i -e 's/\([a-zA-Z0-9_]*\)::\([a-zA-Z0-9_]*\)/\2/g' $action
sed -i -e '1 s/\s*\(final\s\|abstract\s\|\)\([a-zA-Z0-9_\\]*\)\s*\(.*\)/<?php\n\n\/**\n * \2.\n * \n *\n * @see \n *\/\n\1class \2 \3/' $action
sed -i -e 's/ ;/;/g' $action
sed -i -e 's/ ( /(/g' $action
sed -i -e 's/ (\[/(\[/g' $action
sed -i -e 's/ , /, /g' $action
sed -i -e 's/ )/)/g' $action
sed -i -e 's/NULL/null/g' $action
sed -i -e 's/boolean\s/bool /g' $action
sed -i -e 's/integer/int/g' $action
sed -i -e 's/^\(final\s*\|\)\(abstract\s*\|\)\(public\s\|protected\s\|private\s\)\(static\s\|\)\([a-zA-Z0-9\\]*\|\)\(\s*\|\)\([-a-zA-Z0-9_=,":&$([/\\\.\ ]*\))/\1\2\3\4function \7): \5/g' $action
sed -i -e 's/:\s*$//g' $action
sed -i -e 's/(void)/()/g' $action
sed -i -e '/Inherited\s*methods/,/}/ s/^\(final\s*\|\)\(abstract\s*\|\)\(public\|protected\|private\)/    \/\/\1\2\3/g' $action
sed -i -e 's/^\(final\s*\|\)\(abstract\s*\|\)\(public\s\|protected\s\|private\s\)\(static\s\|\)function\s\([a-zA-Z0-9_]*\)\([-a-zA-Z0-9_=,":&$([/\\\.\)\ ]*\):\s\([a-zA-Z0-9_\\]*\)/\n    \/**\n     * \5.\n     * \n     *\n     * @return \7\n     *\n     * @see \n     *\/\n    \1\2\3\4function \5\6: \7\n    {\n    }/g' $action
sed -i -e 's/^\(final\s*\|\)\(abstract\s*\|\)\(public\s\|protected\s\|private\s\)\(static\s\|\)function\s\([a-zA-Z0-9_]*\)\([-a-zA-Z0-9_=,":&$([/\\\.\)\ ]*\)/\n    \/**\n     * \5.\n     * \n     *\n     * @see \n     *\/\n    \1\2\3\4function \5\6\n    {\n    }/g' $action
sed -i -e 's/^const\s*\([a-zA-Z0-9_]*\)\s*\([a-zA-Z0-9_=,:\.\ ]*\)/    const \2/g' $action
sed -i -e 's/^\/\*\s[Constants\|Properties\|Methods].*$//g' $action
sed -i -e 's/^\/\*\sInherited.*$/\n    \/* Inherited methods *\//g' $action

# TODO : ] escape {{{
sed -i -e 's/TextBracket/]/g' $action
sed -i -e 's/TextBar/|/g' $action
sed -i -e 's/"/'\''/g' $action
# }}}

sed -i -e 's/^\(public\|protected\|private\)\s\([a-zA-Z0-9_\\]*\)\s\([a-zA-Z0-9_=$:\.\ ]*\)/ * @property \2 \3\n    \1 \3/g' $action
