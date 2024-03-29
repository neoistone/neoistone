rhel=`rpm -qa | grep redhat-release`
centos=`rpm --query centos-release`
if [[ "${rhel}" == "" ]]; then
        if [[ "${centos}" == "package centos-release is not installed" ]]; then
                echo "This OS Not supporte Nspanel support version are the cento7-8/rhel7-8"
                exit;
         else
          centos_version=`cat /etc/centos-release | tr -dc '0-9.'|cut -d \. -f1`
            os_type="centos${centos_version}"
            os_version="${centos_version}"
            os_name="centos"
        fi
 else
  rhel_versio=`cat /etc/redhat-release | tr -dc '0-9.'|cut -d \. -f1`
      os_type="rhel${rhel_versio}"
      os_version="${rhel_versio}"
      os_name="rhel"
 fi
rm -rf /etc/motd
yum remove -y cloud-init
yum install -y net-tools
yum install -y epel-release
systemctl enable firewalld
systemctl start firewalLd
clear
cat <<EFO>> /etc/motd
   _  __ ____ ____   ____ ____ ______ ____   _  __ ____ Hostingaro
  / |/ // __// __ \ /  _// __//_  __// __ \ / |/ // __/ ${os_name}-${os_version} 
 /    // _/ / /_/ /_/ / _\ \   / /  / /_/ //    // _/
/_/|_//___/ \____//___//___/  /_/   \____//_/|_//___/
https://www.neoistone.com
EFO
