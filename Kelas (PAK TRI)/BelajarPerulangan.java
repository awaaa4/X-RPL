
package KelasPakTri;

public class BelajarPerulangan {

    @SuppressWarnings("empty-statement")
   
          public static void main(String[] args) {
//        for (int a = 0 ; a <= 5 ; a++)
//            System.out.println(a+". najwa");

//        System.out.println("Segitiga siku siku sudut kiri bawah");
            int tinggi = 5; 
//    for (int i = 1 ; i <= tinggi ; i++) { 
//        for (int j = 1 ; j <= i ; j++) {
//            System.out.print("*");
//        }
//            System.out.println();
//    }
//    
//        System.out.println("Segitiga siku siku sudut kiri atas");
//        for (int i = 5 ; i >= 1 ; i--) {
//            for (int j = 1 ; j <= i ; j++) {
//                System.out.print("*");
//            }
//                System.out.println();
//        }
        
        System.out.println("Segitiga siku siku sudut kanan atas");
        for (int i = tinggi ; i >= 1 ; i--) {
            for (int j = tinggi ; j > i ; j--) {
                System.out.print(" ");
                }
            for (int j = 1 ; j <= i ; j++) {
                System.out.print("*");
            }
                System.out.println();
        }
    
    }   
}
    
    



