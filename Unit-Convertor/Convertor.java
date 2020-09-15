import java.util.Scanner;
class Convertor
{
	public static void main(String[] args) {
			
		Scanner sc = new Scanner(System.in);
		int x;

		Functions obj = new Functions();

		do{
		System.out.println("#########################################################################################");
		System.out.println("||\t\t\t1.KiloGram to Gram\t\t\t\t\t\t||");
		System.out.println("||\t\t\t2.Gram to KiloGram\t\t\t\t\t\t||");
		System.out.println("||\t\t\t3.Meter to Centimeter\t\t\t\t\t\t||");
		System.out.println("||\t\t\t4.Centimeter to Meter\t\t\t\t\t\t||");
		System.out.println("||\t\t\t5.MB to GB\t\t\t\t\t\t\t||");
		System.out.println("||\t\t\t6.GB to MB\t\t\t\t\t\t\t||");
		System.out.println("||\t\t\t7.Celsius to Fahrenheit\t\t\t\t\t\t||");
		System.out.println("||\t\t\t8.Ferenheat to Celcious\t\t\t\t\t\t||");
		System.out.println("||\t\t\t9.Pascal to Bar\t\t\t\t\t\t\t||");
		System.out.println("||\t\t\t10.Bar to Pascal\t\t\t\t\t\t||");
		System.out.println("||\t\t\t0.For Exit\t\t\t\t\t\t\t||");

		System.out.print("\n\tSir/Madam Please select your option :) ");
		
		x = sc.nextInt();
		
		switch(x)
		{
			case 0: return;
			//break;

			case 1:	obj.first();
			break;
			
			case 2:obj.second();
			break;
			
			case 3:obj.third();
			break;

			case 4:obj.forth();
			break;

			case 5:obj.fifth();
			break;

			case 6:obj.sixth();
			break;

			case 7:obj.seventh();
			break;

			case 8:obj.eighth();
			break;

			case 9:obj.nineth();
			break;

			case 10:
			break;

			default:
			System.out.println("Please enter valid option");
		}
		}while(x!=0);
	}	
}

class Functions
{
	Scanner sc = new Scanner(System.in);
	void first() //KG to Gram
	{
		System.out.print("\t\t\tEnter Value in KG:");
		float kg=sc.nextFloat();
		System.out.println("====================================================================================");
		System.out.println("\t\t\t"+kg+" KG = "+ kg*1000 +" Grams");
		System.out.println("====================================================================================");
	}
	void second()//Gram to KG
	{
		System.out.print("\t\tEnter Value in Gram:");
		float g=sc.nextFloat();
		System.out.println("====================================================================================");
		System.out.println("\t\t\t"+g+" Grams = "+ g/1000 +" Kilo Grams");
		System.out.println("====================================================================================");
	}
	void third() //Meter to cm
	{
		System.out.print("\t\t\tEnter Value in Meter:");
		float m=sc.nextFloat();
		System.out.println("====================================================================================");
		System.out.println("\t\t\t"+m+" Meter = "+ m*100 +" Centimeter");
		System.out.println("====================================================================================");
	}
	void forth() //Cm to meter
	{
		System.out.print("\t\t\tEnter Value in CentiMeter:");
		float cm=sc.nextFloat();
		System.out.println("====================================================================================");
		System.out.println("\t\t\t"+cm+" CentiMeter = "+ cm/100 +" Meter");
		System.out.println("====================================================================================");
	}
	void fifth()
	{
		System.out.print("\t\t\tEnter Value in MegaByte:");
		float mb=sc.nextFloat();
		System.out.println("====================================================================================");
		System.out.println("\t\t\t"+mb+" MegaByte = "+ mb/1024 +" GigaByte");
		System.out.println("====================================================================================");
	}
	void sixth()
	{
		System.out.print("\t\t\tEnter Value in GigaByte:");
		float gb=sc.nextFloat();
		System.out.println("====================================================================================");
		System.out.println("\t\t\t"+gb+" GigaByte = "+ gb*1024 +" MegaByte");
		System.out.println("====================================================================================");
	}
	void seventh()
	{
		System.out.print("\t\t\tEnter Value in Celcious:");
		float c=sc.nextFloat();
		System.out.println("====================================================================================");
		System.out.println("\t\t\t"+c+" Celcious = "+ ((c*9/5)+32) +" Fahrenheit");
		System.out.println("====================================================================================");

	}
	void eighth()
	{
		System.out.print("\t\t\tEnter Value in Fahrenheit:");
		float f=sc.nextFloat();
		System.out.println("====================================================================================");
		System.out.println("\t\t\t"+f+" Fahrenheit = "+ ((f-32)*5/9) +" Celcious");
		System.out.println("====================================================================================");
	}
	void nineth()
	{
		System.out.print("\t\t\tEnter Value in Pascal:");
		float p=sc.nextFloat();
		System.out.println("====================================================================================");
		System.out.println("\t\t\t"+p+" Pascal = "+ p/100000 +" Bar");
		System.out.println("====================================================================================");
	}
	void tenth()
	{
		System.out.print("\t\t\tEnter Value in Bar:");
		float b=sc.nextFloat();
		System.out.println("====================================================================================");
		System.out.println("\t\t\t"+b+" Bar = "+ b*100000 +" Pascal");
		System.out.println("====================================================================================");
	}
}


