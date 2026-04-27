
package Informasi;


public class Kelas {
//    public String nama="Ardiyanto";
    String namaKelas;
    int jumlahSiswa; 
    
    public Kelas(String namaKelas, int jumlahSiswa) {
        this.namaKelas = namaKelas; 
        this.jumlahSiswa = jumlahSiswa; 
    }
    public void tampil() {
        System.out.println(namaKelas + " - " + jumlahSiswa);
    }
}
