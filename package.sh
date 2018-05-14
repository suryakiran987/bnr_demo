# Script for package into an artifact of type tar
# This script will be present in the root directory of the repository
# Using timestamp in artifact name for package version
# Command to run the script: sh package.sh
# This will be run in a linux based platform or 
# Powershell in Windows platform

# Getting the current time stamp 
TIME=`date +"%m-%d-%y-%H-%M-%S"`

# Setting the package file name
PACKAGE_NAME="bnr.${TIME}.tar"

# Compressing current folder into tar package
tar -cvf $PACKAGE_NAME ./

# Updating the permission of the tar file to provide access to all users
chmod 777 $PACKAGE_NAME
