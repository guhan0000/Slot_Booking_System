<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <%
    import java.util.Scanner;
import java.sql.*;

public class ERationShop {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int[][] slots = new int[6][50]; // 7 days, 3 slots per day
        slots[0][0] = 10; // initialize with some values
        slots[0][1] = 20;
        slots[0][2] = 30;
        String[] days = {"Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"};
        int choice, day, slot, count = 0;
        while (true) {
            System.out.println("Welcome to E-ration shop slot booking system!");
            System.out.println("1. Book slot");
            System.out.println("2. View slots");
            System.out.println("3. Exit");
            System.out.print("Enter your choice: ");
            choice = sc.nextInt();
            //$conn = ""
            //$sql="Select * From "
            switch (choice) {
                case 1:
                    if (count >= 21) { // all slots are booked
                        System.out.println("Sorry, all slots are booked. Please try again later.");
                        break;
                    }
                    System.out.println("Enter the day (1 for Sunday, 2 for Monday, and so on): ");
                    day = sc.nextInt() - 1; // adjust index
                    System.out.println("Enter the slot (1 for 10AM-12PM, 2 for 12PM-2PM, and 3 for 2PM-4PM): ");
                    slot = sc.nextInt() - 1; // adjust index
                    if (slots[day][slot] == 0) { // slot is available
                        slots[day][slot] = 1; // mark as booked
                        count++; // increment count
                        System.out.println("Slot booked successfully!");
                    } else {
                        System.out.println("Sorry, the slot is already booked. Please choose another slot.");
                    }
                    break;
                case 2:
                    System.out.println("Day\t10AM-12PM\t12PM-2PM\t2PM-4PM");
                    for (int i = 0; i < 7; i++) {
                        System.out.print(days[i] + "\t");
                        for (int j = 0; j < 3; j++) {
                            System.out.print((slots[i][j] == 0 ? "Available" : "Booked") + "\t");
                        }
                        System.out.println();
                    }
                    break;
                case 3:
                    System.out.println("Thank you for using E-ration shop slot booking system!");
                    return;
                default:
                    System.out.println("Invalid choice. Please try again.");
            }
        }
    }
}
    %>
</body>
</html>