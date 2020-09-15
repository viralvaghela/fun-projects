import java.util.*;
import java.util.Random; 
import java.time.format.DateTimeFormatter;  
import java.time.LocalDateTime; 
class BankAccount
{
	Scanner sc = new Scanner(System.in);
	Random rand = new Random(); 
	private float balance,acno;
	private String pin,id;
 String cust_name,date;

	void login()
	{			
		System.out.println(" Login here.");
		String uid,upin;

		System.out.print("Enter login ID:");
		uid=sc.next();

		System.out.println("Enter PIN:");
		upin=sc.next();

		if(uid.equals(id) && upin.equals(pin))
		{
			while(true)
			{


				System.out.println("Login successfull.Where do you want to go? \n 1.Internet Banking \n 2.ATM \n 3.Offline Banking \n 4.Show Account Details \n 5.Logout");
				int ch=sc.nextInt();
				switch(ch)
				{
					case 1:
							InternetBanking ibobject = new InternetBanking();	
							System.out.println("1.deposit\n2.Withdraw");
							int c=sc.nextInt();
							if(c==1)
							{
								System.out.print("Enter Amount to Deposit : ");
								int amt=sc.nextInt();
								ibobject.deposit(amt);
							}
							else if(c==2)
							{
								System.out.println("Enter Amount to withdraw : ");
								int amt=sc.nextInt();
								ibobject.withdraw(amt);
							}

					break;

					case 2:
							ATM atmObject = new ATM();
							System.out.println("1.deposit\n2.Withdraw");
						 	c=sc.nextInt();
							if(c==1)
							{
								System.out.print("Enter Amount to Deposit : ");
								int amt=sc.nextInt();
								atmObject.deposit(amt);
							}
							else if(c==2)
							{
								System.out.println("Enter Amount to withdraw : ");
								int amt=sc.nextInt();
								atmObject.withdraw(amt);
							}	
					break;

					case 3:
							System.out.println("Internet banking is not available right now,goto ATM...");
							System.out.println("1.deposit\n2.Withdraw");
						 	c=sc.nextInt();
							if(c==1)
							{
								System.out.print("Enter Amount to Deposit : ");
								int amt=sc.nextInt();
								deposit(amt);
							}
							else if(c==2)
							{
								System.out.println("Enter Amount to withdraw : ");
								int amt=sc.nextInt();
								withdraw(amt);
							}	
					break;

					case 4: displayInfo();
					break;

					case 5:
							System.exit(0);
					break;


				}

			}
		}
	}
		void deposit(float amt)
		{
			if(amt>=20000)
			{
				System.out.println("\nCan't deposit more than 20000");
			}

			else
			{
				balance=balance+amt;
				System.out.println("\nDeposit successfull,Balance is :"+balance);
			}
		}

		void withdraw(float amt)
		{
			if(amt>=10000)
			{
				System.out.println("Can't withdraw more than 10000");
			}
			else if(amt<0)
			{
				System.out.println("Amount can not be negative!!!!");
			}
			else if(balance-amt <10000)
			{
				System.out.println("i am really Sorry,Your balance should be minimum 10000.");
			}
			else
			{
				balance=balance-amt;
				System.out.println("Withdraw successfull,Your account Balance is :"+balance);
			}
		}

	void displayInfo()
	{
		System.out.println("\n============================");
		System.out.println("Account number :"+acno);
		System.out.println("Customer name : "+cust_name);
		System.out.println("Account created date :"+date);
		System.out.println("Balance :"+balance+"\n============================");

	}

	void createAccount()
	{
		System.out.print("Enter customer name :");
		cust_name=sc.nextLine();

		DateTimeFormatter dtf = DateTimeFormatter.ofPattern("yyyy/MM/dd HH:mm:ss");  
		LocalDateTime now = LocalDateTime.now();  
		date = dtf.format(now);  

		System.out.print("Enter  ID :");
		id=sc.nextLine();

		System.out.print("Enter PIN :");
		pin=sc.nextLine();

		//generating acount number ...using random()	
		acno = rand.nextInt(1000); 	
		System.out.println("Account number generating...");
		System.out.println("Your account number is :"+acno+" ,Please enter initial balance:");
		balance=sc.nextInt();
	}

	class InternetBanking{
		void deposit(float amt)
		{
			if(amt>=20000)
			{
				System.out.println("\nCan't deposit more than 20000");
			}

			else
			{
				balance=balance+amt;
				System.out.println("\nDeposit successfull,Balance is :"+balance);
			}
		}

		void withdraw(float amt)
		{
			if(amt>=10000)
			{
				System.out.println("Can't withdraw more than 10000");
			}
			else if(amt<0)
			{
				System.out.println("Amount can not be negative!!!!");
			}
			else if(balance-amt <10000)
			{
				System.out.println("i am really Sorry,Your balance should be minimum 10000.");
			}
			else
			{
				balance=balance-amt;
				System.out.println("Withdraw successfull,Your account Balance is :"+balance);
			}
		}


	}

	class ATM
	{
		void deposit(float amt)
		{
			if(amt>=20000)
			{
				System.out.println("\nCan't deposit more than 20000");
			}

			else
			{
				balance=balance+amt;
				System.out.println("\nDeposit successfull,Balance is :"+balance);

			}
		}
		void withdraw(float amt)
		{
			if(amt>=10000)
			{
				System.out.println("Can't withdraw more than 10000");
			}
			else if(amt<0)
			{
				System.out.println("Amount can not be negative!!!!");
			}
			else if(balance-amt <10000)
			{
				System.out.println("i am really Sorry,Your balance should be minimum 10000.");
			}
			else
			{
				balance=balance-amt;
				System.out.println("Withdraw successfull,Your account Balance is :"+balance);
				
			}
		}
	}
}
class MainClass
{
	public static void main(String[] args) 
	{
		Scanner sc = new Scanner(System.in);
		BankAccount customer = new BankAccount();

		customer.createAccount();
		
		while(true)
		{
			System.out.println("Select Choice:");
			System.out.println("1.Create account\n2.Login");
			int ch=sc.nextInt();

			switch(ch)
			{
				case 1:	customer.createAccount();
				break;

				case 2:	customer.login();	
				break;	
			}	
		}
	}
}
