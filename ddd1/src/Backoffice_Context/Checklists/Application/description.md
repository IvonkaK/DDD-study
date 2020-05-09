 Inside the application layer all is structured by actions.
 
 Command - represents something that has to be done. 
 It's a simple DTO containing only primitive type values and simple list of DOs
 
 Command handler - that knows a particular process.
 For example: Command handler uses command to create something
 The command handler would be our Application Service example