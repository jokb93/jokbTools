A streamlined CRUD script for PHP

Easy to use:
Include connect on your page, change the credentials of the connect.

the script autoload all scripts in the classes folder.(it will go maximum of 10 steps back)

The CRUD:

Constructor:
the contructor will ask for a table and the connection. if you use my connection script, it will be $objCon


the functions:

SwapTable: a simple way to swap to another table in the sql database

SetArray: This is used when construction an SQL statement, this will be the main way to set paramaters for the SQL statement
There is 2 ways possible to do this.
1. An array
2. as a string with comma seperation

Select: a select statement. 
to make this work you can make a string "Id, surname, firstname, city". and use the setarray command. Afterwards create the statement with select.
this will create the select statement.

returns: the SQL string(for debug only).

SendSQL: this will send the statement to your SQL server and return the result, or an error if failed.

create: is a create SQL statement. it will use the Key in the array as keys in the SQL statement, and values as values.
the array could be like this [ surname=>Doe, firstname=>Jhon, city=>London ].

Sql: this is simply an SQL string put into the class directly.

Update: Takes 2 statements, it works similar to create but where the parameters is (Row, Asset).
Row is the row u wanna check on. So if you wanna update Id=15. then the parameters needs to be ("Id", 15).

Delete: same way as create and update with the array. delete take 1 parameter, this represents if its gonna stack multiple where values,
so the parameter could be "&&" to say And.