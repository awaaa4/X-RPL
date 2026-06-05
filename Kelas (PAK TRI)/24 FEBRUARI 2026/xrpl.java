
package belajarjava;

public class xrpl {
    
    public static void main(String[] args) {
        muridrpl objek= new muridrpl();
        System.out.println("Najwa");
        System.out.println("Nama anda adalah: " +objek.nama);
        objek.nama="Najwa";
        System.out.println("Nama anda: " +objek.nama);
        System.out.println("");
        System.out.println("");
        
        objek.DataSiswa();
        
       int Tampilanluas=objek.MenghitungPersegi();
        System.out.println("Luas Persegi Adalah: " +Tampilanluas);
        System.out.println();
        
       siswarpl objet= new siswarpl();
        System.out.println("Hobbi siswa kelas : " +objet.siswa);
        
        objet.Hobi();
    }
}
