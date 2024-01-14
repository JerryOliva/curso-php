#code binary files

#write binary mode 
#first/ import pickle module 
#second / initialize dynamic or default data l=something(list or dict)
#third / open a binary file if it´s not created then it´ll created.
#forth / convert de object file into machine language with pickle.dump(<file to be written> , <file-object>)
#fifth / print the succesfull process
#sixth / close the binary file

#import pickle
#l=[2,3,4,5]
#x=open('binary.dat','wb')
#pickle.dump(l,x)
#print("binary file created")
#x.close()

#read binary mode 

# first / import pickle module
# second / save the binary file in a variable with open rb mode
# third / initialize a new variable and asign to pickle.load(<object-file>)
# forth / print the variable 

#import pickle 
#x=open('binary.dat','rb')
#y=pickle.load(x)
#print(y)
#x.close()

#write and read mode w+b

#import pickle 

#x=open('binary.dat','w+b')
#l=eval(input("Enter values to list: "))
#pickle.dump(l,x)
#print("Succesful process")
#x.seek(0)
#y=pickle.load(x)
#print(y)
#x.close()

import pickle 

x=open('binary.dat','w+b')
n=int(input("How many students you will append?"))
details=[]
for i in range(n):
    name=input("Enter a name: ")
    roll=int(input("Enter number roll: "))
    clas=input("Which class a/b/c?")
    details.append([name,roll,clas])
pickle.dump(details,x)
x.seek(0)
y=pickle.load(x)
f=0
ro=int(input("Which roll are you seeking?"))
for i in y:
    if roll==i[1]:
        f=1
        print("name | roll | class")
        print(i)
if f==0:
    print ("404 not found")
x.close()             