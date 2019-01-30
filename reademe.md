customer 
	- name:string
	- email:string
	- deliveryMethod:string	

Order
	- orderNumber:string
	- description:string
	- toal:float

Invoice
	- invoiceDate:DateTime
	- total:float

- A customer has multiple Orders, each of which has an Invoice

System Requirements:-	
	1- Ability to add new Customers
	2- Ability to create simple Orders for Customer
	3- Ability to run an Invoicing process that turns Orders into Invoices when it's time to bill the customer

System Layers:-
	1- Domain Model Layer (Consists of only models "entities")
	2- Domain Services Layer 