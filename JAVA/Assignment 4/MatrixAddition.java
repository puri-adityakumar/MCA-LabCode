import java.util.*;

public class MatrixAddition {
    

    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        
        System.out.println("Enter the elements of MatrxiA : ");
        int[][] matrixA = getMatrix(3, 3);
        System.out.println("Enter the elements of MatrixB : ");
        int[][] MatrixB = getMatrix(3, 3);

        int[][] result = addMatrices(matrixA, MatrixB);
        System.out.println("The sum of the two matrices is : ");
        printMatrix(result, 3, 3);


    }


    public static int[][] getMatrix (int rows, int cols) {
        Scanner input = new Scanner(System.in);
        int[][] matrix = new int[rows][cols];
        for (int i = 0; i < rows; i++) {
            for (int j = 0; j < cols; j++) {
                matrix[i][j] = input.nextInt();
            }
        }
        return matrix;
    }

    public static int[][] addMatrices (int[][] A, int [][] B ) {
        int rows = A.length;
        int cols = A[0].length;
        int[][] C = new int[rows][cols];
        for(int i = 0; i < rows; i++) {
            for (int j = 0; j < cols; j++) {
                C[i][j] = A[i][j] + B[i][j];
            }
        }
        return C;
    }

    public static void printMatrix(int[][] M, int rows, int cols) {
        for (int i = 0; i < rows; i++) {
            for (int j = 0; j < cols; j++) {
                System.out.print(M[i][j] + " ");
            }
            System.out.println();
        }
    }
}



/* 

######### EASY WAY ##########

import java.util.Scanner;

class MatrixAddition {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int matrixA[][] = new int[3][3];
        int matrixB[][] = new int[3][3];
        int ans[][] = new int[3][3];
	    System.out.println("Enter the elements of the first matrix: ");
        for (int i = 0; i < matrixA.length; i++) {
            for (int j = 0; j < matrixA[i].length; j++) {
                matrixA[i][j] = sc.nextInt();
            }
        }
	    System.out.println("Enter the elements of the second matrix: ");
        for (int i = 0; i < matrixB.length; i++) {
            for (int j = 0; j < matrixB[i].length; j++) {
                matrixB[i][j] = sc.nextInt();
            }
        }
        for (int i = 0; i < 3; i++) {
            for (int j = 0; j < 3; j++) {
                ans[i][j] = matrixA[i][j] + matrixB[i][j];
            }
        }
        System.out.println("The ans is: ");
        for (int i = 0; i < ans.length; i++) {
            for (int j = 0; j < ans[i].length; j++) {
                System.out.print(ans[i][j]+"\t");
            }
            System.out.print("\n");
        }
        sc.close();
    }
}


*/