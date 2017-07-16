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
sed -i -e 's/]/-/g' $action
# }}}

sed -i -e '/\/\*\s*Methods\s*\*\//,/}/  s/^\([a-zA-Z0-9_]*\)\s/public \1 /g' $action
sed -i -e 's/^public\s\(final\s\|abstract\s\|public\s\|protected\s\|private\s\)/\1/g' $action
sed -i -e 's/\([a-zA-Z0-9_]*\)::\([a-zA-Z0-9_]*\)/\2/g' $action
sed -i -e '1 s/\s*\([a-zA-Z0-9_]*\)\s*\(.*\)/<?php\n\n\/**\n * \1\n *\n * \n *\n * @link \n *\/\nclass \1 \2/' $action
sed -i -e 's/ ;/;/g' $action
sed -i -e 's/ ( /(/g' $action
sed -i -e 's/ (\[/(\[/g' $action
sed -i -e 's/ , /, /g' $action
sed -i -e 's/ )/)/g' $action
sed -i -e 's/^\(final\s*\|\)\(abstract\s*\|\)\(public\|protected\|private\)\s*\([a-zA-Z0-9_]*\)\s\([-a-zA-Z0-9_=,:$([\ ]*\))/\1\2\3 function \5): \4/g' $action
sed -i -e 's/:\s*$//g' $action
sed -i -e 's/(void)/()/g' $action
sed -i -e '/Inherited\s*methods/,/}/ s/^\(final\s*\|\)\(abstract\s*\|\)\(public\|protected\|private\)/    \/\/\1\2\3/g' $action
sed -i -e 's/^\(final\s*\|\)\(abstract\s*\|\)\(public\|protected\|private\)\sfunction\s\([a-zA-Z0-9_]*\)\([-a-zA-Z0-9_=,$([\)\ ]*\):\s\([a-zA-Z0-9_]*\)/\n    \/**\n     * \4\n     *\n     * \n     *\n     * @return \6\n     *\n     * @link \n     *\/\n    \1\2\3 function \4\5: \6\n    {\n    }/g' $action
sed -i -e 's/^\(final\s*\|\)\(abstract\s*\|\)\(public\|protected\|private\)\sfunction\s\([a-zA-Z0-9_]*\)\([-a-zA-Z0-9_=,$([\)\ ]*\)/\n    \/**\n     * \4\n     *\n     * \n     *\n     * @link \n     *\/\n    \1\2\3 function \4\5\n    {\n    }/g' $action
sed -i -e 's/^const\s*\([a-zA-Z0-9_]*\)\s*\([a-zA-Z0-9_=,\ ]*\)/    const \2/g' $action
sed -i -e 's/^\/\*\s[Constants\|Properties\|Methods].*$//g' $action
sed -i -e 's/^\/\*\sInherited.*$/\n    \/* Inherited methods *\//g' $action

# TODO : ] escape {{{
sed -i -e 's/-/]/g' $action
# }}}

sed -i -e 's/^\(public\|protected\|private\)\s*readonly/readonly \1/g' $action
sed -i -e 's/^\(public\|protected\|private\)\s\([a-zA-Z0-9_]*\)\s\([a-zA-Z0-9_=$\ ]*\)/ * @property-write \2 \3\n    \1 \3/g' $action
sed -i -e 's/^readonly\s\(public\|protected\|private\)\s\([a-zA-Z0-9_]*\)\s\([a-zA-Z0-9_=$\ ]*\)/ * @property-read  \2 \3\n    \1 \3/g' $action
