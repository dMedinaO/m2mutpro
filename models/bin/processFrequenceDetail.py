import sys
import pandas as pd
import json

dataSet = pd.read_csv(sys.argv[1])
residue = sys.argv[2]

#obtenemos las columnas y formo una lista con los residuos mutados para el resiudo de interes
columns = dataSet.columns.tolist()
wildList = dataSet[columns[1]]
mutationList = dataSet[columns[3]]

residuesMutatedForBlank = []

for i in range(len(wildList)):
    if wildList[i] == residue:
        residuesMutatedForBlank.append(mutationList[i])
        
listResidueUnique = list(set(residuesMutatedForBlank))
values = []

for element in listResidueUnique:
    cont=0
    for data in residuesMutatedForBlank:
        if data == element:
            cont+=1
    values.append(cont)

dictResponse = {}
dictResponse.update({"values": values})
dictResponse.update({"labels": listResidueUnique})
print json.dumps(dictResponse)
