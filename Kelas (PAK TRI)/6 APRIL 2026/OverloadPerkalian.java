package belajarjava;

public class OverloadPerkalian {

    // Method 1: 2 bilangan (int)
    static int Perkalian(int a, int b) {
        return a * b;
    }

    // Method 2: 3 bilangan (int)
    static int Perkalian(int a, int b, int c) {
        return a * b * c;
    }

    // Method 3: 2 bilangan (double)
    static double Perkalian(double a, double b) {
        return a * b;
    }

    
    public static void main(String[] args) {
        //Method 1
        System.out.println(Perkalian(2,3));
        //Method 2
        System.out.println(Perkalian(2,3,4));
        //Method 3
        System.out.println(Perkalian(2.5,3.5));
    }
    
}
