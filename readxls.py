import csv, urllib2, string

def main():
    with open('buildings.csv','rU') as file:
        
        data = [row for row in csv.reader(file.read().splitlines())]
        
        for row in data:
            url = "http://userpages.umbc.edu/~bishoff1/"
            url += "CMSC331/phpCode/proj1/fillDB.php?"
            url += "code='" + row[0] + "'"
            url += "&name='" + string.replace(row[1], ' ', '%20') + "'"
            url += "&region='" + row[2] + "'"
            url += "&facility='" + row[3] + "'"
            print url
            response = urllib2.urlopen(url)

main()
