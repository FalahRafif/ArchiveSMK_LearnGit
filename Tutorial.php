<?php

class Tutorial {
    
    public function index()
    {
        /*
        remind git doang
        */
    }
    
    public function About_Git()
    {
        /*
        Git adalah salah satu sistem pengontrol versi(Version Control System) 
        Fungsi git mencatat setiap perubahan pada file yang di amati oleh git

        Git dikenal juga dengan distributed revision control (VCS terdistribusi), 
        dimana penyimpanan database Git tidak hanya di satu tempat saja.

        BIasanya git di gunakan untuk membuat projek tim

        Manfaat git :
        - Bisa menyimpan seluruh versi source code;
        - Bisa paham cara kolaborasi dalam proyek;
        - Bisa ikut berkontribusi ke poryek open-source;
        - Lebih aman digunakan untuk kolaborasi, karena kita bisa tahu apa yang diubah dan siapa yang mengubahnya.
        - Bisa memahami cara deploy aplikasi modern;
        - Bisa membuat blog dengan SSG.
        */
    }
    public function Configuration_Git()
    {
        /*
        Open a git bash in you computer and type : 
        Config :
        git config --global user.name "My Name"
        git config --global user.email myEmail@exampel.com

        Check Config :
        git config --list
        */
    }
    public function First_Repository_Git()
    {
        /*
        Initial Repo :
        cd Desktop/git_exercise/
        git init (using "." for init in the folder right now)(using "/folder/folder" for init in other folder)

        TL : before do a initial check if you in the right folder 
        */
    }
    public function gitignore()
    {
        /*
            merupakan sebuah file yang berisi daftar nama-nama file dan direktori yang akan diabaikan oleh Git.
            Perubahan apapun yang kita lakukan terhadap file dan direktori yang sudah masuk ke dalam daftar 
            .gitignore tidak akan dicatat oleh Git.
        */
    }
    public function commit()
    {
        /*
            gunakan "git status" untuk mengcek status file
            ada 3 status 
            - modified : file sudah di edit tapi belum di tandai dan belum di simpan di vcm
            - staged : file sudah di tandai dan belum di simpan di vcs
            - commited : file sudah di simpan di vcs

            untuk menandai (staged) file 
            - git add (nama file)
            - git add (nama file) (nama file)
            - git add . (semua file)

            lalu cek kembali di "git status" untuk cek jika semua file sudah staged 
            lalu lakuka commit
            - git commit -m "my first commit"
            - git commit -a -m "my second commit" (jika menabahkan "-a" kita tidak perlu melakkan "git add")
            sekarang semua file tsb sudah di simpan dalam vcs
        */
    }
    public function git_log()
    {
        /* 
            melihat log/riwayat commit 
            - git log
            - git log --oneline (melihat log dengan lebih simple)
            - git log (hash code) (melihat log di commit tertentu)
            - git log (file) (melihat log dalam file tsb)
            - git log --author='author' (melihat log dengan author tertentu)
        */
    }
    public function git_diff()
    {
        /*
            mengcompare commit
            - git diff (hash code) 
            - git diff (file) 
            - git diff (hash code) (hash code)  (antar commit)
            - git diff (branch) (branch) (antar branch)
        */
    }
    public function membatalkan_commit()
    {
        /*
            untuk membatalkan commit 
            - git checkout (hash code) (kembali ke commit sebelumnya)
            - git reset (file) (mengembalikan status staged ke modified)
            - git checkout HEAD~3 (file) (kembali ke commit sebelumnya)
            - git revert (hash code) (mengembalikan seluruh commit ke seblumnya)
        */
    }
    public function git_branch()
    {
        /*
            

            membuat cabang / branch untuk mencegah conflict
            - git branch (melihat branch (*branch menandakan sedang aktif di branch tsb))
            - git branch (nama branch) (menambah branch)
            - git -d (nama branch) (menghapus branch)
        */
    }
    public function git_merge()
    {
        /* 
            untuk menggabungkan branch pertama melakukan checkout ke master
            lalu merge
            - git merge (branch)

            berhati hatilah saat melakukan merge terkadang aka terjadi merge conflict

        */
    }
    public function git_checkout()
    {
        /*
            git checkout digunakajn untuk kembali ke commit sebelumnya
            bersifat temporer / sementara 
            kita juga dapat membuat cabang dari commit sebelumnya 
            - git -b (nama branch) (hash code)
        */
    }
    public function git_reset()
    {
        /*
            mengreset atau men delete commit dari sesudah commit yang kita berada

            Perintah ini memiliki tiga argumen atau opsi utama, yaitu --soft, --mixed, dan --hard.
            --soft akan mengebalikan dengan kondisi file dalam keadaan staged
            --mixed akan mengebalikan dengan kondisi file dalam keadaan modified
            --hard akan mengebalikan dengan kondisi file dalam keadaan commited

            - git reset --soft (hash code)
        */
    }
    public function git_revert()
    {
        /*
            berbeda dengan reset ,revert mengambil file di commit sebelumnya dan menggabungkan nya dengan commit terakhir 
            -git revert (hash code)
            kesimpulan
            Perintah git checkout mengembalikan file dalam kondisi sebelumnya, tapi bersifat sementara.
            Perintah git reset, akan mengembalikan file ke kondisi sebelumnya, kemudian menghapus catatan sejarah commit beikutnya.
            Perintah git revert mengembalikan file dengan tidak menghapus sejarah commit.
        */
    }
    public function git_remote()
    {
        /*
            bekerja menggunakan git remote 
            remote yang bisa kita pakai
            - github
            - gitbucket
            - dll

            langkah-langkah
            1. membuat repository di github
            2. menambahkan remote 
                - git remote  add (remote(bisa "github" dll)) (url remote(contoh : https://github.com/FalahRafif/test-git)) 
                ada dua pilihan 
                bisa menggunakan url seperti di atas
                atau bisa juga menggunakan ssh
                - git@github.com:FalahRafif/belajar-git.git
                perbedaan menggunakan url/http dan ssh
                - url akan meminta password setiap push
                - sebaliknya ssh dari url tetapi akan meinta konfigurasi ssh key
            3. setelah itu ketik "git remote -v" untuk melihat remote apa saja yang sudah di tambahkan
            4. mengubah nama remote (optional)
                - git remote (nama remote) (nama remote)
                - git remote remove (nama remote) (untuk menghapus remote)
            5.melakukan push (mengupload repo kita ke remote)
                - git push (remote) (tujuan branch)
            6. melakukan pull dan fetch (mengambil repo kita dari remote)
                - git fetch  (remote) (branch)
                - git pull  (remote) (branch)
                perbedaan
                Apa perbedaanya?
                - Perintah git fetch hanya akan mengambil revisi (commit) saja dan tidak langsung melakukan penggabungan (merge) terhadap repository lokal.
                - Sedangkan git pull akan mengambil revisi (commit) dan langsung melakukan penggabungan (merge) terhadap repository lokal.
                - Terus kita harus pakai yang mana?
                - Tergantung dari situasi dan kondisi.
                - Bila kita sudah membuat perubahan di repository lokal, maka sebaiknya menggunakan git fetch agar perubahan yang kita lakukan tidak hilang.
                - Namun, bila kita tidak pernah melakukan perubahan apapun dan ingin mengambil versi terakhir dari repository remote, maka gunakanlah git pull.

        */
    }
}



?>