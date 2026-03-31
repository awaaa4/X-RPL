
public class Overloading {
    void DataKelas(String nmkelas){
        System.out.println("Kelas Kita Adalah "+nmkelas);
    }
   
    void DataKelas(String nmkelas, int jmlsiswa){
        System.out.println("Kls Kita Adalah "+nmkelas);
        System.out.println("Jumlah sobat kita adalah "+jmlsiswa+" siswa");
    }
    
    void DataJurusan (String nmjurusan, int jmljurusan) {
        System.out.println("Jurusan kita ada "+nmjurusan);
        System.out.println("Jumlah jurusan kita ada "+jmljurusan+" jurusan");
    }
   
}

