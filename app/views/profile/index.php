<h2>User SPK</h2>
<button><a href="<?= BASEURL; ?>/profile/tambah/">Tambah User</a></button>
<div class="card">

    <table>
        <h4>User SPK</h4>
        <thead>
            <tr>
                <th>Id User</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>

        </thead>
        <tbody>
            
                <?php
                foreach ($data['user'] as $x => $y) {
                    ?><tr>
                    <?php
                    foreach ($y as $key => $value) {
                        echo "<td>" . $value . "</td>";
                    }
                   
                ?>
                    <td align="center" class="menu">
                        <a class="btn" id="ubah" href="<?= BASEURL; ?>/profile/edit/<?= $data['user']['id']; ?>">Ubah</a>
                        <a class="btn" id="hapus" href="<?= BASEURL; ?>/profile/hapus/<?= $data['user']['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus ini?')" />Hapus</a>
                    </td>
                <?php

                }
                ?>
            </tr>

        </tbody>
    </table>
</div>