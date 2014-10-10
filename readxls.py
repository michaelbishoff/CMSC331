import csv
with open('buildings.csv','rU') as file:
    #contents = csv.reader(file, dialect=csv.excel_tab)
    #matrix = list()
    data = [row for row in csv.reader(file.read().splitlines())]
    #for row in contents:
    #    matrix.append(row)
    
    #print (matrix[0][0])
    for row in data:
        print row
#[x for x in contents]
