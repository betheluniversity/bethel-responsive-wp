declare -a filenames=('body-end' 'body-start' 'footer' 'global-header' 'head' 'toolbox')

for filename in ${filenames[@]}; do
    curl -B -H "Accept: application/octet-stream" -o $filename.twig http://cdn1.bethel.edu/partials/$filename.twig
done
