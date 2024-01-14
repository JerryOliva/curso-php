import csv 

with open ('csv_list.csv','a+') as list:
    write=csv.writer(list)
    ans="y"
    while ans=='y' or ans=='Y':
        name=input("Enter a name: ")
        id=int(input("Enter a number: "))
        country=input("Enter a country: ")
        write.writerow([name,id,country])
        ans=input("More data? y/n")
    list.seek(0)
    read=csv.reader(list)
    for line in read:
        print(line)
list.close()