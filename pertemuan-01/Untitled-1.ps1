1..16 | ForEach-Object {
New-Item -ItemType Directory -Name ("pertemuan-{0:D2}" -f $_)
}


1..16 | ForEach-Object {
$folder = "pertemuan-{0:D2}" -f $_
New-Item -Path "$folder\README.md" -ItemType File -Value "# $folder"
} 

git config --global user.email "2522500019@mahasiswa.atmaluhur.ac.id"
git config --global user.name "Zahra Aulia Febiani"