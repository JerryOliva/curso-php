#writelines is use to write or overwrite the data that´s send in the append function

#x=open('abc.txt','w')
#a=[]
#for i in range(0,2):
    #name=input("Enter a name ")
    #a.append(name +'\n')
#x.writelines(a)
#x.close()

#seek function is use to change the pointer lecture position

#x=open("b.txt")
#x.seek(10)
#y=x.read()
#print(y)

#write an read mode (w+) change to (a+) and we can add names and read the file without lose data.
#First / we create or overwrite a file whatever the extension is
#second / create data and write it into file
#third / get the pointer back to initial position so we can read the data file content
#forth / save the data in a tmp variable then print it


#x=open("write_read.txt",'w+')
#for i in range(0,2):
    #name=input("Enter internaut name "+ str(i+1) + ":")
    #x.write(name+'\n')
#x.seek(0)
#y=x.read()
#print('content data:  \n', y)
#x.close()

#read and write mode (r+)

#x=open('write_read.txt','r+')
#y=x.read()
#print('actual data-content: \n', y)
#for i in range(0,2):
    #name=input("Enter your name: ")
    #x.write(name+'\n')
#x.seek(0)
#y=x.read()
#print('content-data update \n', y)

#append mode (a)

#x=open('write_read.txt', 'a')
#for i in range(0,2):
    #name=input("Whats your name? ")
    #x.write(name+'\n')
#x.close() 

#function replace to manipulate data in a file
#first / open data file
#second / read the file and print it to know what´s text content
#third / input 2 strings the one who´s going to replace the other 
#forth / open a the same data file with a new variable in w+ mode
#fifth / create a new variable and use replace function use the inputs as parameters
#sixth / get the pointer to the begging with seek function
#seventh / create a variable and read the update data 
#eighth / print data and close both files the first that we initialized and the one in the middle.

x=open('write_read.txt','r')
y=x.read()
print('content-data \n',y)
s1=input("Whats the string to replace:\n")
s2=input("Whats the replace of the string:\n")
a=open('write_read.txt','w+')
a.write(y.replace(s1,s2))
a.seek(0)
c=a.read()
print('data-update: \n',c)
y.close()
a.close()



