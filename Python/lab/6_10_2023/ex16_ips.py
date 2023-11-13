# Working with nested directories
ifs = {
'eth0':{'IP' : '1.1.1.1', 'Status' : 'up'},
'eth1':{'IP' : '2.2.2.2', 'Status' : 'up'},
'wlan0':{'IP' : '3.3.3.3', 'Status' : 'down'},
'wlan1':{'IP' : '4.4.4.4', 'Status' : 'up'}
}
test = input('Enter interface: ')
print(ifs[test]['Status'])
for k, v in ifs.items( ) :
    if v['Status'] == 'up' :
        print(k, v['IP'])
print('Total interfaces = ', len(ifs))
ifs['eth2'] = {'IP' : '5.5.5.5', 'Status' :'down'}
ifs['wlan2'] = {'IP' : '6.6.6.6', 'Status' : 'up'}
for k, v in ifs.items( ) :
    print(k, v)