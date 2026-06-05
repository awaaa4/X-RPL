/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author MyPC PRO
 */
public class belajaroperator {

    
    public static void main(String[] args) {
        // Operator Aritmatika
        
        int a= 10;
        int b= 3;
        
        int penjumlahan= a+b;
        
            System.out.println("Hasil penjumlahan 2 angka adalah: "+penjumlahan);
        
        int pengurangan= a-b;
        
            System.out.println("Hasil pengurangan 2 angka adalah: "+pengurangan);
            
        int perkalian= a*b;
        
            System.out.println("Hasil perkalian 2 angka adalah: "+perkalian);
            
        double pembagian= a/b;
        
            System.out.println("Hasil pembagian 2 angka adalah: "+pembagian);
            
        int modulus= a%b;
        
            System.out.println("Hasil modulus 2 angka adalah: "+modulus);
            
            
        // Operator Penugasan
        // = memberi nilai
        // += penjumlahan nilai
        // -=
        // *=
        // /=
        // %=
        
        int c=20;
        int a1=4;
        int b1=40;
        
        c +=5;
        a -=2;
        b *=100;
        a1 /=2;
        b1 %=3;
        
            System.out.println(c);
            System.out.println(a);
            System.out.println(b);
            System.out.println(a1);
            System.out.println(b1);
            
            
        // Operator Pembanding
        // ==
        // !=
        // >>=
        // <<=
        
        int d= 50;
        int e= 10;
        
            boolean hasil= d==e;
            boolean hasil1= d>=e;
            boolean hasil2= d!=e;
            boolean hasil3= d<=e;
            
                System.out.println(hasil);
                System.out.println(hasil1);
                System.out.println(hasil2);
                System.out.println(hasil3);
                
                
        // Operator Logika
            boolean result = true && true;
            boolean result2 = d>e && d==e;
            boolean result3 = true || true;
            boolean result4 = d!=e || d<e;
            
                System.out.println("Operator Logika-1 "+result);
                System.out.println("Operator Logika-2 "+result2);
                System.out.println("Operator Logika-3 "+result3);
                System.out.println("Operator Logika-4 "+result4);
    }
    
}
