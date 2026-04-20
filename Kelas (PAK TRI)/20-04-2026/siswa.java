
package belajaroop;

public class siswa {
    siswa(){
        System.out.println("Ini adalah Constructor-1");
    }
    
    siswa(String nama) {
        System.out.println("Ini Constructor-2");
        System.out.println("Nama Saya adalah: "+nama);
    }
    
    siswa(String nama, int usia) {
        System.out.println("Ini Constructor-3");
        System.out.println("Nama saya adalah: "+nama);
        System.out.println("Umur saya: "+usia);
    }
    
    siswa(String nama, int usia, String alamat) {
        System.out.println("Ini Construcktor-4");
        System.out.println("Nama saya adalah: "+nama);
        System.out.println("Usia saya adalah: "+usia);
        System.out.println("Saya bertempat tinggal di: "+alamat);
    }
    
}
