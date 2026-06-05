
import java.util.Scanner;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author MyPC PRO
 */


public class BelajarInputOutput {

    public static void main(String[] args) {
        
        Scanner inputuser= new Scanner(System.in);
            System.out.println("Inputkan Nama Anda: ");
        String nama= inputuser.nextLine();
            System.out.println("Nama yang di input: "+nama);
            
            System.out.println("Berapakah nomor absen anda: ");
        int absen = inputuser.nextInt();
            System.out.println("Nomor Absen Anda: "+absen);
            
            System.out.println("Berapakah uang saku anda: ");
        double saku = inputuser.nextDouble();
            System.out.println("Uang Sakuku adalah Rp: "+saku);
            
            
        Scanner masukan = new Scanner (System.in);
            System.out.println("Karakter apa yang paling kamu suka: ");
        String simbol= masukan.nextLine();
            System.out.println("Karakter yang kamu suka adalah: "+simbol);
            
    }
    
}
